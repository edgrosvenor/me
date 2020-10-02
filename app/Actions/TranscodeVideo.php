<?php

namespace App\Actions;

use Aws\ElasticTranscoder\ElasticTranscoderClient;

class TranscodeVideo
{
    private string $inputKey;
    private string $outputKey;
    private string $presetId;

    public function __construct($inputKey, $outputKey, $presetId = '1351620000001-100070')
    {
        $this->inputKey = $inputKey;
        $this->outputKey = $outputKey;
        $this->presetId = $presetId;
    }

    public function execute()
    {
        $client = ElasticTranscoderClient::factory(['region' => config('transcoder.region'), 'version' => 'latest']);

        $client->createJob([
            'PipelineId' => config('transcoder.pipeline'),
            'Input' => [
                'Key' => $this->inputKey,
            ],
            'Output' => [
                'Key' => $this->outputKey,
                'PresetId' => $this->presetId,
            ],
        ]);
    }
}
