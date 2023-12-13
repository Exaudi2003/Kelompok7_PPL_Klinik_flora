const { expect } = require('@wdio/globals');
const LoginPage = require('../../pageobjects/login.page');

describe('Laravel Project Testing login dokter', () => {
    it('should not login with empty email and empty password', async () => {
        await testLogin('', '', 'http://127.0.0.1:8000/login');
        await pauseFor5Seconds();
        await verifyErrorMessages(['Email is required', 'Password is required']);
    });

    it('should not login with valid email and invalid password', async () => {
        await testLogin('williamstmrg31@gmail.com', '1234', 'http://127.0.0.1:8000/login');
        await pauseFor5Seconds();
        await verifyErrorMessage('email atau password salah');
    });

    it('should not login with invalid email and valid password', async () => {
        await testLogin('williamA@gmailoo', 'flora123', 'http://127.0.0.1:8000/login');
        await pauseFor5Seconds();
        await verifyErrorMessage('email atau password salah');
    });

    it('should not login with invalid email and invalid password', async () => {
        await testLogin('natanael@gmail.com', 'flora1234', 'http://127.0.0.1:8000/login');
        await pauseFor5Seconds();
        await verifyErrorMessages(['email atau password salah']);
    });

    it('should not login with empty email and valid password', async () => {
        await testLogin('', 'flora123', 'http://127.0.0.1:8000/login');
        await pauseFor5Seconds();
        await verifyErrorMessage('Email is required');
    });

    it('should not login with valid email and empty password', async () => {
        await testLogin('williamstmrg31@gmail.com', '', 'http://127.0.0.1:8000/login');
        await pauseFor5Seconds();
        await verifyErrorMessage('Password is required');
    });

    it('should login with valid email (use a number) and valid password', async () => {
        await LoginPage.open();
        await LoginPage.login('12312312', 'flora123', 'http://127.0.0.1:8000/dokter');
        await pauseFor5Seconds();
        await verifyErrorMessages(['Email is invalid']);
    });

    it('should login again with invalid email and valid password', async () => {
        await LoginPage.open();
        await LoginPage.login('williamstmrg3a1@gmail.com', 'flora123', 'http://127.0.0.1:8000/login');
        await pauseFor5Seconds();
        await verifyErrorMessages(['email atau password salah']);
    });

    it('should login again with valid email and valid password', async () => {
        await LoginPage.open();
        await LoginPage.login('williamstmrg31@gmail.com', 'flora123', 'http://127.0.0.1:8000/login');
        await pauseFor5Seconds();
        await verifyErrorMessages(['email atau password salah']);
    });

    async function testLogin(email, password, expectedUrl) {
        await browser.url('http://127.0.0.1:8000/login');
        const emailInput = await $('#email');
        const passwordInput = await $('#password');
        await emailInput.setValue(email);
        await passwordInput.setValue(password);
        const loginButton = await $('button[type="submit"]');
        await loginButton.click();
        await expect(browser).toHaveUrl(expectedUrl);
    }

    async function pauseFor5Seconds() {
        console.log('Waiting for 5 seconds...');
        await browser.pause(5000);
        console.log('Resuming after 5 seconds.');
    }

    async function verifyErrorMessage(expectedErrorMessage) {
        const errorMessage = await browser.$('.alert-danger');
        expect(errorMessage.getText()).toContain(expectedErrorMessage);
    }

    async function verifyErrorMessages(expectedErrorMessages) {
        const errorMessage = await browser.$('.alert-danger');
        for (const expectedErrorMessage of expectedErrorMessages) {
            expect(errorMessage.getText()).toContain(expectedErrorMessage);
        }
    }
});
