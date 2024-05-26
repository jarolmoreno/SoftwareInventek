import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ControlysoporteComponent } from './controlysoporte.component';

describe('ControlysoporteComponent', () => {
  let component: ControlysoporteComponent;
  let fixture: ComponentFixture<ControlysoporteComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ControlysoporteComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(ControlysoporteComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
