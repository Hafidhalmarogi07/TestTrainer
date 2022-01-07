import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { InfografikComponent } from './infografik/infografik.component';
import { RouterModule, Routes } from '@angular/router';

const routes: Routes = [{
  path: "",
  component: InfografikComponent,
  children: [
    {
      path: "infografik",
      component: InfografikComponent
    }]
}]

@NgModule({
  declarations: [
  ],
  imports: [
    CommonModule,
    RouterModule.forChild(routes)
  ]
})
export class InfografikModule { }
