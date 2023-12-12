import { $ } from '@wdio/globals'
import Page from './page.js';

/**
 * sub page containing specific selectors and methods for a specific page
 */
class ObatPage extends Page {
  /**
   * define selectors using getter methods
   */
  get obatInput() {
    return $("#nama_obat");
  }

  get keteranganInput() {
    return $("#keterangan");
  }
  get tanggalInput() {
    return $("#tanggal_masuk");
  }
  get jumlahInput() {
    return $("#jumlah");
  }
  get kemasanDropdown() {
    return $("#kemasan");
  }

  get btnUpdate() {
    return $('.btn.btn-success');
  }

  /**
   * a method to encapsule automation code to interact with the page
   * e.g. to login using username and password
   */
  async obat(
    nama_obat,
    keterangan,
    tanggal_masuk,
    jumlah,
    kemasan,
  ) {
    await this.obatInput.setValue(nama_obat);
    await this.keteranganInput.setValue(keterangan);
    await this.tanggalInput.setValue(tanggal_masuk);
    await this.jumlahInput.setValue(jumlah);
    await this.kemasanDropdown.selectByVisibleText(kemasan);

    // Wait for update button to be clickable
    // await this.btnUpdate.waitForExist();
    // await this.btnUpdate.waitForClickable();

    // Click the update button

    await this.btnUpdate.click();
  }

  /**
   * overwrite specific options to adapt it to page object
   */
  open() {
    return super.open("obats/redirect/32");
  }
}
export default new ObatPage();