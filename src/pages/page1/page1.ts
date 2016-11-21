import { Component } from '@angular/core';
import { ModalController } from 'ionic-angular';
//import { ModalPage } from './modal-page';
import { HomePage } from '../admin/admin';
import { NavController, AlertController, LoadingController } from 'ionic-angular';
import { Storage } from '@ionic/storage';

@Component({
  selector: 'page-page1',
  templateUrl: 'page1.html'
})
export class Page1 {
  data: any;
  public getsession: any;
  public name : any;
  public tokensito: any;
  x: any;

  constructor(public navCtrl: NavController, public storage: Storage, private Modelctrl: ModalController, private alert: AlertController, private loading: LoadingController) {
    this.data = {};
      this.data.title= "";
      this.data.descrip= "";

      
    let loader = this.loading.create({
              content: "Cargando Datos, Espere porfavor",
              duration: 3000,
              
        });
       loader.present();
          this.navCtrl.setRoot(HomePage);
  }

  

}
