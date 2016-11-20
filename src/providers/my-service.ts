import { Injectable } from '@angular/core';
import { Http } from '@angular/http';
import 'rxjs/add/operator/map';
import {Storage} from '@ionic/storage';
import { NavController, AlertController, LoadingController } from 'ionic-angular';
import { Page1 } from '../pages/page1/page1';

/*
  Generated class for the MyService provider.

  See https://angular.io/docs/ts/latest/guide/dependency-injection.html
  for more info on providers and Angular 2 DI.
*/
@Injectable()
export class MyService {
  private mydata: any;
  public getsession: any;


  constructor(public http: Http, public storage: Storage, private navCtrl : NavController, private alert : AlertController, private loading: LoadingController) {
    }
  postLogin(data){
    
    let link = "http://localhost:8080/Sitios_web/APIphp/securelogin.php";//link de la api
     
    return this.http.post(link,data)
      .map(res => res.json())
           
   
  }
  checkToken(){
       return this.getsession = this.storage.get('token')
  }
  
}
