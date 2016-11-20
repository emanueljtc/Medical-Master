import { Component } from '@angular/core';
import { NavController, ViewController } from 'ionic-angular';
import { Http } from '@angular/http';
/*
  Generated class for the Genpasspage page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-genpasspage',
  templateUrl: 'genpasspage.html'
})
export class GenpasspagePage {
  data: any;
  constructor(public navCtrl: NavController, private viewCtrl: ViewController, public http:Http) {

         this.data = {};
        this.data.username="";
        this.data.password = "";
  }
       
  
    
    generarContra(){
          let username = this.data.username;
          let data  = JSON.stringify({username});
          let link = "http://localhost:8080/Sitios_web/APIphp/generarpass.php";
            this.http.post(link,data)
            .subscribe
    }
  dismiss(){
    this.viewCtrl.dismiss();
  }
}
