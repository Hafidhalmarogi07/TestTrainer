import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { HomeComponent } from './home/home.component';
import { InfografikComponent } from './infografik/infografik.component';



@NgModule({
  declarations: [
    HomeComponent,
    InfografikComponent
  ],
  imports: [
    CommonModule
  ]
})
export class HomeModule { }
