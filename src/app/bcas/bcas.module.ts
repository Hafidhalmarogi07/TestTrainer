import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule, Routes } from '@angular/router';
import { HomeComponent } from './home/home.component';
import { KarirComponent } from './karir/karir.component';
import { TentangComponent } from './tentang/tentang.component';
import { ProdukComponent } from './produk/produk.component';
import { BcasComponent } from './bcas/bcas.component';
import { InfoComponent } from './info/info.component';
const routes : Routes=[  {
    path:"",
    component:HomeComponent,
},{
  path:"tentang",
    component:TentangComponent,
}

    
    
]

@NgModule({
  declarations: [
    HomeComponent,
    BcasComponent,
    TentangComponent,
    KarirComponent,
    ProdukComponent,
    InfoComponent
  ],
  imports: [
    CommonModule,
    RouterModule.forChild(routes)
  ]
})
export class BcasModule { }
