import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { TanggungJawabComponent } from './tanggung-jawab/tanggung-jawab.component';

const routes: Routes = [
  {
    path: 'produk',
    loadChildren: () =>
      import('./produk/produk.module').then((mod) => mod.ProdukModule),
  },
  {
    path: 'info',
    loadChildren: () =>
      import('./info/info.module').then((mod) => mod.InfoModule),
  },
  {
    path: 'tentang',
    loadChildren: () =>
      import('./tentang/tentang.module').then((mod) => mod.TentangModule),
  },
  {
    path: 'karir',
    loadChildren: () =>
      import('./karir/karir.module').then((mod) => mod.KarirModule),
  },
  {
    path: 'tanggung-jawab-sosial-perusahaan',
    component: TanggungJawabComponent,
  },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule],
})
export class AppRoutingModule {}
