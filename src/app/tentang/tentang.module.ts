import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TentangComponent } from './tentang/tentang.component';
import { TanggungjawabComponent } from './tanggungjawab/tanggungjawab.component';
import { RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  {
    path: '',
    component: TentangComponent,
    children: [
      {
        path: 'tanggung-jawab-perusahaan',
        component: TanggungjawabComponent,
      },
    ],
  },
];

@NgModule({
  declarations: [TentangComponent, TanggungjawabComponent],
  imports: [CommonModule, RouterModule.forChild(routes)],
})
export class TentangModule {}
