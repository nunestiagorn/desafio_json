<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DealRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'call-history-was-created._id' => 'required|string',
            'call-history-was-created.acw_time' => 'required|integer',
            'call-history-was-created.agent.id' => 'required|integer',
            'call-history-was-created.agent.name' => 'required|string',
            'call-history-was-created.amd_status' => 'required|integer',
            'call-history-was-created.amd_time' => 'required|integer',
            'call-history-was-created.billed_time' => 'required|integer',
            'call-history-was-created.billed_value' => 'required|numeric',
            'call-history-was-created.call_date' => 'required|date',
            'call-history-was-created.call_mode' => 'required|string',
            'call-history-was-created.calling_time' => 'required|integer',
            'call-history-was-created.campaign.id' => 'required|integer',
            'call-history-was-created.campaign.name' => 'required|string',
            'call-history-was-created.company.id' => 'required|integer',
            'call-history-was-created.company.name' => 'required|string',
            'call-history-was-created.created_at' => 'required|date',
            'call-history-was-created.criteria' => 'nullable',
            'call-history-was-created.dial_code' => 'required|integer',
            'call-history-was-created.ended_by_agent' => 'required|boolean',
            'call-history-was-created.hangup_cause' => 'required|integer',
            'call-history-was-created.ivr_after_call' => 'required|boolean',
            'call-history-was-created.ivr_after_call_time' => 'required|integer',
            'call-history-was-created.list.id' => 'required|integer',
            'call-history-was-created.list.name' => 'required|string',
            'call-history-was-created.list.original_name' => 'nullable|string',
            'call-history-was-created.mailing_data._id' => 'required|string',
            'call-history-was-created.mailing_data.campaign_id' => 'required|integer',
            'call-history-was-created.mailing_data.column_position' => 'required|integer',
            'call-history-was-created.mailing_data.company_id' => 'required|integer',
            'call-history-was-created.mailing_data.data.estado' => 'required|string',
            'call-history-was-created.mailing_data.data.municipio' => 'required|string',
            'call-history-was-created.mailing_data.data.nome_fantasia' => 'required|string',
            'call-history-was-created.mailing_data.data.razao_social' => 'required|string',
            'call-history-was-created.mailing_data.dialed_identifier' => 'required|integer',
            'call-history-was-created.mailing_data.dialed_phone' => 'required|integer',
            'call-history-was-created.mailing_data.identifier' => 'required|string',
            'call-history-was-created.mailing_data.list_id' => 'required|integer',
            'call-history-was-created.mailing_data.on_calling' => 'required|boolean',
            'call-history-was-created.mailing_data.phone' => 'required|string',
            'call-history-was-created.mailing_data.row_position' => 'required|integer',
            'call-history-was-created.mailing_data.uf' => 'required|string',
            'call-history-was-created.max_time_exceeded' => 'required|integer',
            'call-history-was-created.number' => 'required|string',
            'call-history-was-created.phone_type' => 'required|string',
            'call-history-was-created.qualification.behavior' => 'nullable',
            'call-history-was-created.qualification.behavior_text' => 'nullable',
            'call-history-was-created.qualification.conversion' => 'nullable',
            'call-history-was-created.qualification.id' => 'nullable',
            'call-history-was-created.qualification.is_dmc' => 'required|boolean',
            'call-history-was-created.qualification.is_unknown' => 'required|boolean',
            'call-history-was-created.qualification.name' => 'required|string',
            'call-history-was-created.qualification_note' => 'nullable|string',
            'call-history-was-created.rate_value' => 'required|numeric',
            'call-history-was-created.recorded' => 'required|boolean',
            'call-history-was-created.should_dispatch_webhook' => 'required|boolean',
            'call-history-was-created.sid' => 'nullable|string',
            'call-history-was-created.speaking_time' => 'required|integer',
            'call-history-was-created.speaking_with_agent_time' => 'required|integer',
            'call-history-was-created.status' => 'required|integer',
            'call-history-was-created.telephony_id' => 'required|string',
            'call-history-was-created.updated_at' => 'required|date',
            'call-history-was-created.ura_time' => 'required|integer',
            'call-history-was-created.waiting_time' => 'required|integer',
        ];
    }
}
