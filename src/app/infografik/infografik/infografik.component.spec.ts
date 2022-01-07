import { ComponentFixture, TestBed } from '@angular/core/testing';

import { InfografikComponent } from './infografik.component';

describe('InfografikComponent', () => {
  let component: InfografikComponent;
  let fixture: ComponentFixture<InfografikComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ InfografikComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(InfografikComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
