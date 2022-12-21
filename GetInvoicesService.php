<?php

namespace App;

final readonly class GetInvoicesService
{
    public function __construct(
        protected AccountingRepository $accountingRepository
    )
    {
    }

    /**
     * @param int $tenantId
     * @param string $status
     * @return array
     */
    public function getInvoicesByStatus(int $tenantId, string $status): array
    {
        return $this->accountingRepository
            ->getRecordsBy('tenant_id', $tenantId)
            ->filter(function (Invoice $invoice) use ($status): bool {
                return $invoice?->status === $status;
            })->toArray();
    }
}
