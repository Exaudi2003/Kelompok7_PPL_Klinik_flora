const { expect } = require('@wdio/globals');
const LoginPage = require('../../pageobjects/login.page');

const ObatPage = require('../../pageobjects/obat.page');

describe('tambah data obat ', () => {
    it('should login with valid credentials', async () => {
        await LoginPage.open();

        await LoginPage.login('william@gmail.com', 'william123');

        // Tunggu hingga URL sesuai dengan yang diharapkan setelah login
        await browser.waitUntil(async () => {
            const currentUrl = await browser.getUrl();
            return currentUrl === 'http://127.0.0.1:8001/asisten';
        });

        // Verifikasi URL setelah login
        const currentUrl = await browser.getUrl();
        expect(currentUrl).toBe('http://127.0.0.1:8001/asisten');
    });
    it('harus mengisi data obat dengan benar', async () => {
        // Navigate to your application's URL
        await browser.url('http://127.0.0.1:8001/obat/create');
    
        // Get input elements
        const obatInput = $('#nama_obat');
        const singkatanInput = $('#singakatan');
        const keteranganInput = $('#keterangan');
        const tanggalInput = $('#tanggal_masuk');
        const jumlahInput = $('#jumlah');
        const kemasanDropdown = $('#kemasan');
        const ukuranObatDropdown = $('#ukuran');
        const btnTambah = $('button.btn-success');
    
        // Set input values
        await obatInput.setValue('Captopril');
        await singkatanInput.setValue('cpt');
        await keteranganInput.setValue('Obat hipertensi');
        await tanggalInput.setValue('06-06-2023');
        await jumlahInput.setValue('5');
        await kemasanDropdown.selectByVisibleText('Tablet');
        await ukuranObatDropdown.selectByVisibleText('5btr');
    
        // Wait for submit button to be clickable
        await btnTambah.waitForExist();
        await btnTambah.waitForClickable();
    
        // Click the submit button
        await btnTambah.click();
        await browser.waitUntil(async () => {
            const currentUrl = await browser.getUrl();
            return currentUrl === 'http://127.0.0.1:8001/obat/create';
        });
    });
    it('mengisi nama obat dengan integer', async () => {
        // Navigate to your application's URL
        await browser.url('http://127.0.0.1:8001/obat/create');
    
        // Get input elements
        const obatInput = $('#nama_obat');
        const singkatanInput = $('#singakatan');
        const keteranganInput = $('#keterangan');
        const tanggalInput = $('#tanggal_masuk');
        const jumlahInput = $('#jumlah');
        const kemasanDropdown = $('#kemasan');
        const ukuranObatDropdown = $('#ukuran');
        const btnTambah = $('button.btn-success');
    
        // Set input values
        await obatInput.setValue('12345');
        await singkatanInput.setValue('cpt');
        await keteranganInput.setValue('Obat hipertensi');
        await tanggalInput.setValue('06-06-2023');
        await jumlahInput.setValue('5');
        await kemasanDropdown.selectByVisibleText('Tablet');
        await ukuranObatDropdown.selectByVisibleText('5btr');
    
        // Wait for submit button to be clickable
        await btnTambah.waitForExist();
        await btnTambah.waitForClickable();
    
        // Click the submit button
        await btnTambah.click();

        const alert = $('#alert alert-success alert-dismissible fade show mt-2');
        await expect(alert).not.toBeDisplayed()
        await browser.waitUntil(async () => {
            const currentUrl = await browser.getUrl();
            return currentUrl === 'http://127.0.0.1:8001/obat/create';
        });
    });
    it('mengisi tanggal yang bukan hari ini', async () => {
        // Navigate to your application's URL
        await browser.url('http://127.0.0.1:8001/obat/create');
    
        // Get input elements
        const obatInput = $('#nama_obat');
        const singkatanInput = $('#singakatan');
        const keteranganInput = $('#keterangan');
        const tanggalInput = $('#tanggal_masuk');
        const jumlahInput = $('#jumlah');
        const kemasanDropdown = $('#kemasan');
        const ukuranObatDropdown = $('#ukuran');
        const btnTambah = $('button.btn-success');
    
        // Set input values
        await obatInput.setValue('Captopril');
        await singkatanInput.setValue('cpt');
        await keteranganInput.setValue('Obat hipertensi');
    
        // Set the tanggalInput to a date in the future
        const tomorrow = new Date();
        tomorrow.setDate(tomorrow.getDate() + 1);
        const futureDate = tomorrow.toLocaleDateString('id-ID', { month: '2-digit', day: '2-digit', year: 'numeric' });
        await tanggalInput.setValue(futureDate);
    
        await jumlahInput.setValue('5');
        await kemasanDropdown.selectByVisibleText('Tablet');
        await ukuranObatDropdown.selectByVisibleText('5btr');
    
        // Wait for submit button to be clickable
        await btnTambah.waitForExist();
        await btnTambah.waitForClickable();
    
        // Click the submit button
        await btnTambah.click();
    
        // Ensure that the alert for success is not displayed
        const alert = $('#alert.alert-success.alert-dismissible.fade.show.mt-2');
        await expect(alert).not.toBeDisplayed();
    
        // Wait until the URL is back to the expected page
        await browser.waitUntil(async () => {
            const currentUrl = await browser.getUrl();
            return currentUrl === 'http://127.0.0.1:8001/obat/create';
        });
    });
    
      
});