import { expect } from '@wdio/globals';
import LoginPage from '../pageobjects/login.page.js';
import SecurePage from '../pageobjects/secure.page.js';

describe('My Login application', () => {
    const loginData = [
        // Your test data here...
    ];

    loginData.forEach((data, index) => {
        it(`should successfully log in - Test ${index + 1}`, async () => {
            await browser.url("http://127.0.0.1:8001/");
            
            const emailInput = $("#email");
            const inputPassword = $("#password");
            const btnSubmit = $(".btn.btn-primary.btn-block");

            await emailInput.setValue(data.email);
            await inputPassword.setValue(data.password);

            await btnSubmit.waitForExist();
            await btnSubmit.waitForClickable();
            await btnSubmit.click();

            // Add assertions to check if the login was successful
            const securePageElement = await SecurePage.someElement;
            expect(securePageElement).toBeDisplayed();

            // Perform additional actions, e.g., clicking on the sidebar
            const sidebarButton = // locate the sidebar button element
            await sidebarButton.click();

            // Add more assertions or interactions as needed
        });
    });
});
