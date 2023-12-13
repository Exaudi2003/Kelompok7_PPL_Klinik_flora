describe('Create Pasien', () => {
    it('should create a new patient successfully', async () => {


    
      
      // Buka halaman login
      await browser.url('http://localhost:8000/login');
  
      // Isi informasi login
      await testLogin('williamstmrg31@gmail.com', 'flora123', 'http://127.0.0.1:8000/login');
  
      // Klik tombol login
      await $('#submit').click();
  
  
      // Buka halaman create pasien
      await browser.url('http://localhost:8000/pasien/create');
  
      // Isi informasi pasien
      
  
      // Klik tombol tambah
      await $('#submit').click();
  
      // Verifikasi pasien berhasil ditambahkan
      const pasienNameText = await $('#name').getText();
      expect(pasienNameText).toBe('John Doe');
  
      // Verifikasi pesan sukses muncul (opsional)
      const successAlert = await $('//div[@class="alert alert-success"]').isDisplayed();
      expect(successAlert).toBe(true);
  
      // Verifikasi elemen lain (opsional)
      // ...
    });

    async function testLogin(email, password, expectedUrl) {
        await browser.url('http://127.0.0.1:8000/login');
        const emailInput = await $('#email');
        const passwordInput = await $('#password');
        await emailInput.setValue(email);
        await passwordInput.setValue(password);
        const loginButton = await $('button[type="submit"]');
        await loginButton.click();
        await expect(browser).toHaveUrl(expectedUrl);
    }

    async function testCreatePasien(name, tanggalLahir, gender, address, wali, phoneNumber, expectedUrl) {
        await browser.url('http://127.0.0.1:8000/pasien/create');
      
        const nameInput = await $('#name');
        const tanggalLahirInput = await $('#tanggal_lahir'); // Ganti selector sesuai dengan elemen tanggal lahir
        const genderRadioButtons = await $$('.gender-radio-button');
        const addressInput = await $('#address');
        const waliInput = await $('#wali');
        const phoneNumberInput = await $('#phone_number');
        const submitButton = await $('button[type="submit"]');
      
        await nameInput.setValue(name);
        await tanggalLahirInput.setValue(tanggalLahir); // Ganti format tanggal sesuai dengan input
        await genderRadioButtons.filter(radioButton => radioButton.getAttribute('value') === gender).click();
        await addressInput.setValue(address);
        await waliInput.setValue(wali);
        await phoneNumberInput.setValue(phoneNumber);
        await submitButton.click();
      
        await expect(browser).toHaveUrl(expectedUrl); // Ganti expectedUrl sesuai dengan halaman setelah create pasien sukses
      }
      
  });
  