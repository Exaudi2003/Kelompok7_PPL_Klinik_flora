const { expect } = require('@wdio/globals');
const LoginPage = require('../../pageobjects/login.page');

const AsistenPage = require('../../pageobjects/asisten.page');

describe('tambah data asisten ', () => {
    it('should login with valid credentials', async () => {
        await LoginPage.open();

        await LoginPage.login('williamstmrg31@gmail.com', 'flora123');

        // Tunggu hingga URL sesuai dengan yang diharapkan setelah login
        await browser.waitUntil(async () => {
            const currentUrl = await browser.getUrl();
            return currentUrl === 'http://127.0.0.1:8001/dokter';
        });

        // Verifikasi URL setelah login
        const currentUrl = await browser.getUrl();
        expect(currentUrl).toBe('http://127.0.0.1:8001/dokter');
    });
    
    it('harus mengisi data asisten dengan benar', async () => {
        // Navigate to your application's URL
        await browser.url('http://127.0.0.1:8001/createAsisten');
    
        // Get input elements
        const asistenInput = $('#name');
        const emailInput = $('#email');
        const passwordInput = $('#password');
        const konfirmasiInput = $('[name="password_confirmation"]');
        // const roleInput = $('#role_id');
        const btnSubmit = $('button.btn-success');
    
        // Set input values
        await asistenInput.setValue('Joicee');
        await emailInput.setValue('joicee@gmail.com');
        await passwordInput.setValue('joice1234');
        await konfirmasiInput.setValue('joice1234');
        // await roleInput.setValue('Asisten');
    
        // Wait for submit button to be clickable
        await btnSubmit.waitForExist();
        await btnSubmit.waitForClickable();
    
        // Click the submit button
        await btnSubmit.click();
        await browser.waitUntil(async () => {
            const currentUrl = await browser.getUrl();
            return currentUrl === 'http://127.0.0.1:8001/createAsisten';
        });
        const currentUrl = await browser.getUrl();
        expect(currentUrl).toBe('http://127.0.0.1:8001/createAsisten');
        console.log('Asisten data successfully submitted!');
    });
    
      
});