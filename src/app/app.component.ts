import { Component, ViewChild } from '@angular/core';
import { Nav, Platform } from 'ionic-angular';
import { StatusBar, Splashscreen } from 'ionic-native';
import { Storage } from '@ionic/storage';

import { Page1 } from '../pages/page1/page1';
import { Page2 } from '../pages/page2/page2';
import { HomePage } from '../pages/admin/admin';
import { LoginPage } from '../pages/login/login';


@Component({
  templateUrl: 'app.html'
})
export class MyApp {
  @ViewChild(Nav) nav: Nav;

  rootPage: any = LoginPage;
  token: any;
  pages: Array<{title: string, component: any}>;

  constructor(public platform: Platform, public storage: Storage) {
    this.initializeApp();
    this.storage.get('token').then((value)=>{
    this.token = value;

    })
    // used for an example of ngFor and navigation
    this.pages = [
      
      { title: 'Inicio', component: Page1 },
      { title: 'Page Two', component: Page2 },
      
    ];

  }

  initializeApp() {
    this.platform.ready().then(() => {
      // Okay, so the platform is ready and our plugins are available.
      // Here you can do any higher level native things you might need.
      StatusBar.styleDefault();
      Splashscreen.hide();
    });
  }

  openPage(page) {
    // Reset the content nav to have just this page
    // we wouldn't want the back button to show in this scenario
    this.nav.setRoot(page.component);
  }

  logout(){
    this.storage.remove('username');
    this.storage.remove('token');
    this.nav.setRoot(LoginPage);
    this.token = "";
  }
}
