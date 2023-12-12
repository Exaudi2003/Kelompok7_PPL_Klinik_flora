// search.spec.js
import { expect } from '@wdio/globals';
import LoginPage from '../pageobjects/login.page.js';
import SearchPage from '../pageobjects/search.page.js';

describe('Medicine Search', () => {
    it('should search for medicine after login', async () => {
        await LoginPage.loginAndNavigateToSearch('william@gmail.com', 'william123', 'Salbutamol ( vtn)	');

        // Tambahkan asertions atau langkah-langkah lain setelah pencarian
        // Contoh assertions:
        const searchResultExists = await SearchPage.searchResult.isExisting();
        expect(searchResultExists).toBe(true, 'Search result should exist after searching for Salbutamol ( vtn)	');
    });
});