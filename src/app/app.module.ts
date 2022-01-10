import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { BcasyariahComponent } from './bcasyariah/bcasyariah.component';
import { KkbibComponent } from './bcasyariah/kkbib/kkbib.component';
import { HomeComponent } from './bcasyariah/home/home.component';

@NgModule({
  declarations: [
    AppComponent,
    BcasyariahComponent,
    KkbibComponent,
    HomeComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
