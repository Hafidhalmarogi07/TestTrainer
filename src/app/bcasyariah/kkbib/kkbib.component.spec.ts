import { ComponentFixture, TestBed } from '@angular/core/testing';

import { KkbibComponent } from './kkbib.component';

describe('KkbibComponent', () => {
  let component: KkbibComponent;
  let fixture: ComponentFixture<KkbibComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ KkbibComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(KkbibComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
