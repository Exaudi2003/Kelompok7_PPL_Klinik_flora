import { expect } from '@wdio/globals';
import LoginPage from '../pageobjects/login.page.js'
import ObatPage from '../pageobjects/update_obat.js'

describe('update data obat', () => {
    it('should login with valid credentials', async () => {
        await LoginPage.open();

        await LoginPage.login('william@gmail.com', 'william123');

        // Wait until URL is 'http://127.0.0.1:8001/asisten'
        await browser.waitUntil(async () => {
            const currentUrl = await browser.getUrl();
            return currentUrl === 'http://127.0.0.1:8001/asisten';
        });

        // Verify the URL after login
        const currentUrl = await browser.getUrl();
        expect(currentUrl).toBe('http://127.0.0.1:8001/asisten');
    });

    it('should update obat data with valid values', async () => {
        // Navigate to the edit page
       await ObatPage.open()

       await ObatPage.obat('sanmol','Obat sakit','06-06-2023','10','Tablet')

     
        });
    });