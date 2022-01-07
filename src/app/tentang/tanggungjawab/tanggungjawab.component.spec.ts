import { ComponentFixture, TestBed } from '@angular/core/testing';

import { TanggungjawabComponent } from './tanggungjawab.component';

describe('TanggungjawabComponent', () => {
  let component: TanggungjawabComponent;
  let fixture: ComponentFixture<TanggungjawabComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ TanggungjawabComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(TanggungjawabComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
