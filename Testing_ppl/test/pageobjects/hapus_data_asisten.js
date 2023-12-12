import { $ } from '@wdio/globals'
import Page from './page.js';

/**
 * sub page containing specific selectors and methods for a specific page
 */
class HapusAsistenPage extends Page {
    /**
     * define selectors using getter methods
     */
    get btndelete () {
        return $('.btn-group');
    }

    

    /**
     * a method to encapsule automation code to interact with the page
     * e.g. to login using username and password
     */
    async hapusAsisten () {
       
        await this.btndelete.click();
    }

    /**
     * overwrite specific options to adapt it to page object
     */
    open () {
        return super.open('hapusAsisten');
    }
}

export default new HapusAsistenPage();