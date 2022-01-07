import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { Routes } from '@angular/router';
import { AppRoutingModule } from './app-routing.module';

import { AppComponent } from './app.component';
import { HomeComponent } from './home/home/home.component';
import { InfografikComponent } from './infografik/infografik/infografik.component';


@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    InfografikComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
