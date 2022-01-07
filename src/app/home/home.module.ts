import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { HomeComponent } from './home/home.component';
import { ContentComponent } from './content/content.component';
import { RouterModule, Routes } from '@angular/router';


const routes: Routes = [
  {
    path: "",
    component: HomeComponent,
    children: [
      {
        path: "penghargaan",
        component: ContentComponent
      }
    ]
    
  }
]


@NgModule({
  declarations: [
    HomeComponent,
    ContentComponent
  ],
  imports: [
    CommonModule,
    RouterModule.forChild(routes)
  ]
})
export class HomeModule { }
