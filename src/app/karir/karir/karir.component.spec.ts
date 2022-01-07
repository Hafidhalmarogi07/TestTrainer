import { ComponentFixture, TestBed } from '@angular/core/testing';

import { KarirComponent } from './karir.component';

describe('KarirComponent', () => {
  let component: KarirComponent;
  let fixture: ComponentFixture<KarirComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ KarirComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(KarirComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
