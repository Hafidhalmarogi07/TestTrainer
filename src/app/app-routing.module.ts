import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

const routes: Routes = [{
    path:"", 
    loadChildren:()=>import ("./bcas/bcas.module").then(
      (mod) =>mod.BcasModule)
    //import module 
    //deklarasikan module =auth module
    //load children = kita akan load komponen atau module auth=>auth module 
  },
 
];
@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
