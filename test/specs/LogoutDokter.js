import { expect } from '@wdio/globals';
import LoginPage from '../pageobjects/login.page.js';
import SecurePage from '../pageobjects/secure.page.js';

describe('My Login application', () => {
    const loginData = [
        { email: 'williamstmrg31@gmail.com', password: 'flora123', expected: true }, // Correct
        // Add more test data as needed
    ];

    loginData.forEach((data, index) => {
        it(`should login with valid credentials - Test ${index + 1}`, async () => {
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

            // Log success message
            console.log(`Login successful for Test ${index + 1} with credentials: ${JSON.stringify(data)}`);

            // Add your assertions or further actions as needed
            // For example, you can assert that a specific element is visible on the next page:
            // await SecurePage.someElement.waitForExist();

           // Click the user dropdown to reveal the logout button
           const userDropdown = $(".dropdown .nav-link.dropdown-toggle");
           await userDropdown.waitForExist();
           await userDropdown.click();

           // Click the logout button
           const logoutButton = $(".dropdown-menu button[type='submit']");
           await logoutButton.waitForExist();
           await logoutButton.click();
        });
    });
});