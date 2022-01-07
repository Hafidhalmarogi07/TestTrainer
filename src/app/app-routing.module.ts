import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { HomeComponent } from './home/home.component';
import { EducationComponent } from './education/education.component';

const routes: Routes = [
  
  { path: 'home',  component:  HomeComponent},
  { path: 'education',  component:  EducationComponent},
  { path: '**',   redirectTo: ''}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
