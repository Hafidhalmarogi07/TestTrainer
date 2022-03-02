import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BcasComponent } from './bcas.component';

describe('BcasComponent', () => {
  let component: BcasComponent;
  let fixture: ComponentFixture<BcasComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ BcasComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(BcasComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
