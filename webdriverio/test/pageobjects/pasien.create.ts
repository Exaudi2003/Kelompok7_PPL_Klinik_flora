import { $ } from '@wdio/globals'
import Page from './page';
//import { Selector } from 'webdriverio';

/**
 * sub page containing specific selectors and methods for a specific page
 */
class CreatePasien extends Page {

    public get nameInput() {
        return $('#name');
    }

    public get dateInput() {
        return $('#tanggal_lahir');
    }

    public get genderDropdown() {
        return $('#gender');
    }
    public get addressInput() {
        return $('#address');
    }

    public get phoneInput() {
        return $('#phone_number');
    }

    public get btnTambah() {
        return $('button.btn-success');
    }

    /**
     * a method to encapsule automation code to interact with the page
     * e.g. to login using username and password
     */
    public async createPasien(name: string, tanggal_lahir: string, gender: string, address: string, phone_number: string) {

        await this.nameInput.setValue(name);
        await this.dateInput.setValue(tanggal_lahir);
        await this.genderDropdown.selectByVisibleText(gender);
        await this.addressInput.setValue(address);
        await this.phoneInput.setValue(phone_number);
        //await this.inputPassword.setValue(password);
        await this.btnTambah.waitForExist();
        await this.btnTambah.waitForClickable();

        // const isPhoneNumberValid = !isNaN(parseInt(phone_number)) && parseInt(phone_number) >= 0;
        // const inputNameValue = await this.nameInput.getText();
        // const nameErrorMessage = $('#form-control');
        // // Check if phone number is valid integer
        // if (!isPhoneNumberValid) {
        //     console.error('Phone number must be a valid integer');
        //     return;
        // }
        // // Check if name is empty
        // if (!phone_number) {
        //     await nameErrorMessage.waitForDisplayed();
        //     console.error('Please fill out the name field');
        //     return;
        // }
        // const nameErrorMessage = $('#form-control');
        // if (!inputNameValue) {
        //     await expect(nameErrorMessage).not.toBeDisplayed();
        //     await nameErrorMessage.waitForDisplayed();
        //     //console.error('Please fill out the name field');
        //     return;
        // }

        // Check if name is a string
        // if (typeof name !== 'string') {
        //     console.error('Name must be a string');
        //     return;
        // }

        // await this.btnTambah.click();
    }

    /**
     * overwrite specific options to adapt it to page object
     */
    public navigateToCreatePatient() {
        return super.open('patients/create/');
    }
}

export default new CreatePasien();
