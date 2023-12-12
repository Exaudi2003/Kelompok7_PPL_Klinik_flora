// search.page.js
import { $ } from '@wdio/globals';
import Page from './page.js';

class SearchPage extends Page {
    get inputSearch() {
        return $('input[class="search form-control"]');
    }

    get btnSearch() {
        return $('button[type="submit"]');
    }

    get searchResult() {
        return $('.table-hover tbody tr'); // Ganti dengan selektor yang sesuai di halaman Anda
    }

    async searchMedicine(medicineName) {
        await this.inputSearch.setValue(medicineName);
        await this.btnSearch.click();
    }
}

export default new SearchPage();