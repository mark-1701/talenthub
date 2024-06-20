<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PayrollResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'employee_id' => $this->employee_id,
            'start_period' => $this->start_period,
            'end_period' => $this->end_period,
            'gross_salary' => $this->gross_salary,
            'deductions' => $this->deductions,
            'net_salary' => $this->net_salary,
            'employee' => $this->employee
        ];
    }
}
