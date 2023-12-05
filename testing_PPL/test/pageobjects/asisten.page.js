const { $ } = require('@wdio/globals')
const Page = require('./page');

/**
 * sub page containing specific selectors and methods for a specific page
 */
class AsistenPage extends Page {
    /**
     * define selectors using getter methods
     */
    get asistenInput () {
        return $('#name');
    }

    get emailInput () {
        return $('#email');
    }

    get passwordInput () {
        return $('#password');
    }
    get konfirmasiInput () {
        return $('[name="password_confirmation"]');
    }
    // get roleInput () {
    //     return $('#role_id');
    // }
    get btnSubmit () {
        return $('button[type="submit"]');
    }

    /**
     * a method to encapsule automation code to interact with the page
     * e.g. to login using username and password
     */
    async asisten(name, email, password, password_confirmation, jumlah, kemasan, ukuran) {
        await this.asistenInput.setValue(name);
        await this.emailInput.setValue(email);
        await this.passwordInput.setValue(password);
        await this.$(`[name='password_confirmation']`).setValue(password_confirmation);
        // await this.roleInput.setValue(role_id);
        await this.btnSubmit.click();
    }
    

    /**
     * overwrite specific options to adapt it to page object
     */
    open () {
        return super.open('asisten');
    }
}

module.exports = new AsistenPage();
