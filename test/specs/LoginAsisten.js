import { expect } from '@wdio/globals';
import LoginPage from '../pageobjects/login.page.js';
import SecurePage from '../pageobjects/secure.page.js';

describe('My Login application', () => {
    const loginData = [
        { email: 'william@gmail.com', password: 'william123', expected: true }, // Correct
        { email: 'william31stmrg@gmail.com', password: 'flora123', expected: true }, // Correct
        { email: '', password: 'wrongpassword', expected: false }, // Incorrect
        { email: 'nicholas@gmail.com', password: 'nicho123', expected: true }, // Correct
        { email: '', password: 'wrongpassword', expected: false }, // Incorrect
        { email: 'fanny@gmail.com', password: 'fanny123', expected: true }, // Correct
        { email: '', password: 'wrongpassword', expected: false }, // Incorrect
        // Add more test data as needed
    ];
    

    loginData.forEach((data, index) => {
        it(`should ${data.expected ? 'login' : 'fail to login'} with credentials - Test ${index + 1}`, async () => {
            // Navigate to the login page
            await browser.url("http://127.0.0.1:8001/");

            // Find input fields and submit button
            const emailInput = $("#email");
            const inputPassword = $("#password");
            const btnSubmit = $(".btn.btn-primary.btn-block");

            // Set input values
            await emailInput.setValue(data.email);
            await inputPassword.setValue(data.password);

            // Wait for the submit button to exist and be clickable
            await btnSubmit.waitForExist();
            await btnSubmit.waitForClickable();

            // Click the submit button to login
            await btnSubmit.click();

            // Add assertions to check if the login is successful or not
            if (data.expected) {
                await SecurePage.someElement.waitForExist();
                // You can add more assertions for a successful login
            } else {
                // Check for an error message or other indicators of a failed login
                const errorMessage = $(".error-message"); // Adjust this selector based on your application
                expect(errorMessage).toBeVisible();
                // You can add more assertions for a failed login
            }
        });
    });
});
