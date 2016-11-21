import { Component } from '@angular/core';
import { NavController, AlertController, LoadingController } from 'ionic-angular';
import { MyService } from '../../providers/my-service';
import { Storage } from '@ionic/storage';
import { Page1 } from '../page1/page1';
//import { AdminPage } from '../admin/admin';
import { GenpasspagePage } from '../genpasspage/genpasspage';
//import { ModalPage } from './modal-page';
import { ModalController } from 'ionic-angular';
//import * as localforage from 'localforage';
import 'rxjs/add/operator/map';
 
 
/*
  Generated class for the Login page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-login',
  templateUrl: 'login.html',
  providers: [MyService]
})
export class LoginPage {
  data: any;
  private mydata: any;
  
  //fetchdata : any;
  constructor(public navCtrl: NavController, private service: MyService, public storage: Storage, private alert : AlertController, private loading: LoadingController, private Modelctrl: ModalController ) {
  
  this.data = {};
  this.data.username = "";
  this.data.password= "";
 
  }
  login(){
    let username = this.data.username;
    let password = this.data.password;
    let data  = JSON.stringify({username, password});
      this.service.postLogin(data)
        .subscribe(data => {
            this.mydata = data;
            this.storage.set('nombre', this.mydata[0].name);
            this.storage.set('token', this.mydata[0].token);
            this.storage.set('apellido', this.mydata[0].last_name);
          console.log(this.mydata);
          this.navCtrl.setRoot(Page1);
        }, error =>{
          console.log(error);
            let alert = this.alert.create({
              title: 'Fallido',
              subTitle: 'Cedula o contraseña incorrecta, Porfavor Intente de nuevo.',
              buttons: ['ok']
        });
        alert.present();
        })
  }
  navgenpass(){
          let modal = this.Modelctrl.create(GenpasspagePage);
            modal.present();

  }
}
