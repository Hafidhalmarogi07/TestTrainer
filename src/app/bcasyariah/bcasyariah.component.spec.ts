import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BcasyariahComponent } from './bcasyariah.component';

describe('BcasyariahComponent', () => {
  let component: BcasyariahComponent;
  let fixture: ComponentFixture<BcasyariahComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ BcasyariahComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(BcasyariahComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
