const assert = require('assert');

describe('Laravel Project Testing', () => {
  it('should login with valid email and valid password', async () => {
    await testLogin('william@gmail.com', 'william123', 'http://127.0.0.1:8000/asisten');
    await pauseFor5Seconds();
  });

  it('should logout after successful login', async () => {
    await browser.url('http://127.0.0.1:8000/asisten');

    const userDropdown = $(".dropdown .nav-link.dropdown-toggle");
    await userDropdown.waitForExist();
    await userDropdown.click();
    await pauseFor5Seconds();
    
    // Click the logout button
    const logoutButton = $(".dropdown-menu button[type='submit']");
    await logoutButton.waitForExist();
    await logoutButton.click();

    // Adding a wait for the logout process to complete
    await browser.waitUntil(async () => {
      const currentUrl = await browser.getUrl();
      return currentUrl === 'http://127.0.0.1:8000/';
    });

    const currentUrl = await browser.getUrl();
    
    assert.strictEqual(currentUrl, 'http://127.0.0.1:8000/');
  });
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

async function pauseFor5Seconds() {
  await browser.pause(5000); // Pause for 5 seconds
}
