import { TestBed } from '@angular/core/testing';

import { WashingPointService } from './washing-point.service';

describe('WashingPointService', () => {
  let service: WashingPointService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(WashingPointService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
