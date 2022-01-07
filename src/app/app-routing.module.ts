import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  {
    path: "home",
    loadChildren: () => import ("./home/home.module").then((mod) => mod.HomeModule)
  },
  {
    path: "infografik",
    loadChildren: () => import ("./infografik/infografik.module").then((mod) => mod.InfografikModule)
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
