//import { expect } from '@wdio/globals'
import LoginPage from '../pageobjects/login.page'
import CreatePasien from '../pageobjects/pasien.create'

const email = 'william@gmail.com';
const password = 'william123';

describe('Edit data pasien', () => {

    it('should login with valid credentials', async () => {
        await LoginPage.open();
        await LoginPage.login(email, password);
    })

    it('Inputan nama tidak ada', async () => {
        // Navigate to your application's URL
        await CreatePasien.navigateToCreatePatient()

        await CreatePasien.createPasien('',
            '2003-12-22',
            'Laki-Laki',
            '',
            '')
      

        console.log('Field validation works as expected!');
    });

    it('Mengisi data pasien dengan benar', async () => {
        // Navigate to your application's URL
        await CreatePasien.navigateToCreatePatient()

        await CreatePasien.createPasien('re',
            '2003-12-22',
            'Laki-Laki',
            'Jakarta',
            '081262425039')
        

        console.log('Patient data successfully submitted!');
       // allureReporter.addFeature('Feature')
    });

});

