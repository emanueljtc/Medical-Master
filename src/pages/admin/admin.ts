import { Component } from '@angular/core';
import { ModalController } from 'ionic-angular';
//import { ModalPage } from './modal-page';
import { MyService } from '../../providers/my-service';
import { NavController } from 'ionic-angular';
import { Storage } from '@ionic/storage';

/*
  Generated class for the Admin page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-admin',
  templateUrl: 'admin.html',
  providers: [MyService]
})
export class HomePage {
   data: any;
  public getsession: any;
  public name : any;
  public lastname: any;
  x: any;


  constructor(public navCtrl: NavController, public storage: Storage, private Modelctrl: ModalController, private service: MyService) {
  }
  ionViewDidLoad() {
         
        this.service.checkToken()
        .then((key: any)=>{
        // console.log (key);
          this.x  = key;
          if( this.x == null){
           console.log("nulo");
            
          } else{
             this.name = this.storage.get('nombre');// trae del storage el valor de la variable nombre
            this.name.then((value : any)=>{
              this.name = value;
             //console.log (this.name);
            });
            this.lastname = this.storage.get('apellido'); // lo mismo aqui
            this.lastname.then((value:any)=>{
              this.lastname = value;
              //console.log(this.lastname);
            });
          }
           
        })
  }

}
