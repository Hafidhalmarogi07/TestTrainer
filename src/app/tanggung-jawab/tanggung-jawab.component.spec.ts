import { ComponentFixture, TestBed } from '@angular/core/testing';

import { TanggungJawabComponent } from './tanggung-jawab.component';

describe('TanggungJawabComponent', () => {
  let component: TanggungJawabComponent;
  let fixture: ComponentFixture<TanggungJawabComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ TanggungJawabComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(TanggungJawabComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
