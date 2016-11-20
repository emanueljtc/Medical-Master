import { NgModule } from '@angular/core';
import { IonicApp, IonicModule } from 'ionic-angular';
import { MyApp } from './app.component';
import { Page1 } from '../pages/page1/page1';
import { Page2 } from '../pages/page2/page2';
import { HomePage } from '../pages/admin/admin';
import { LoginPage } from '../pages/login/login';
import { Storage } from '@ionic/storage';
import { MyService } from '../providers/my-service';
import { GenpasspagePage } from '../pages/genpasspage/genpasspage';

@NgModule({
  declarations: [
    MyApp,
    Page1,
    Page2,
    LoginPage,
    GenpasspagePage,
    HomePage
  
  ],
  imports: [
    IonicModule.forRoot(MyApp)
  ],
  bootstrap: [IonicApp],
  entryComponents: [
    MyApp,
    Page1,
    Page2,
    LoginPage,
    GenpasspagePage,
    HomePage
    
  ],
  providers: [
    
    MyService,
    Storage
   

  ]
})
export class AppModule {}
