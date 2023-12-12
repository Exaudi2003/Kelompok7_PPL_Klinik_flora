// import { expect } from '@wdio/globals'
//import HapusAsistenPage from '../pageobjects/hapus_data_asisten.js'
import LoginPage from '../pageobjects/login.page.js'

// import SecurePage from '../pageobjects/secure.page.js'

describe('hapus data asisten', () => {
    it('should login with valid credentials', async () => {
        await LoginPage.open()

        await LoginPage.login('williamstmrg31@gmail.com', 'flora123')
        
        //tunggu hingga url sesuai dengan yang diharapkan setelah login
    
        await browser.waitUntil(async () => {
            const currentUrl = await browser.getUrl();
            return currentUrl === 'http://127.0.0.1:8001/dokter';
        });

         // Verifikasi URL setelah login
         const currentUrl = await browser.getUrl();
         expect(currentUrl).toBe('http://127.0.0.1:8001/dokter');

        
    })

    it('should delete data', async () => {
        // Open the page
        await browser.url('http://127.0.0.1:8001/showAkun');

        // Wait for the delete button to be present
        const deleteButton = $('.btn.btn-danger.btn-just-icon.btn-sm');
        await deleteButton.waitForExist();

        // Click the delete button
        await deleteButton.click();


        // Wait for the page to reload
        await browser.waitUntil(async () => {
            const currentUrl = await browser.getUrl();
            return currentUrl === 'http://127.0.0.1:8001/showAkun';
        });

        // Verify that the data is deleted (you may need to implement this part based on your UI)
        // For example, you can check if the deleted element is still present on the page

        // Assertion or validation can be added here based on your actual UI
        // Example: assert.equal(await someElement.getText(), 'Expected Text');
    });
   
})