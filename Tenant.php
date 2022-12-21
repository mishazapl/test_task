<?php

namespace App;

use App\Models\GetInvoicesService;
use App\Models\PaymentStatuses;
use Illuminate\Database\Eloquent\Model;

final class Tenant extends Model
{
    /**
     * @param int $tenantId
     * @param GetInvoicesService $getInvoicesService
     * @return array
     */
    public function getAwaitableInvoices(
        int                $tenantId,
        GetInvoicesService $getInvoicesService
    ): array
    {
        return $getInvoicesService->getInvoicesByStatus($tenantId, PaymentStatuses::Awaiting->value);
    }

    /**
     * @param int $tenantId
     * @param GetInvoicesService $getInvoicesService
     * @return array
     */
    public function getPaidInvoices(
        int                $tenantId,
        GetInvoicesService $getInvoicesService
    ): array
    {
        return $getInvoicesService->getInvoicesByStatus($tenantId, PaymentStatuses::Paid->value);
    }
}
