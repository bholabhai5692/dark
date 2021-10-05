<?php
// This file was auto-generated from sdk-root/src/data/iotdeviceadvisor/2020-09-18/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>AWS IoT Core Device Advisor is a cloud-based, fully managed test capability for validating IoT devices during device software development. Device Advisor provides pre-built tests that you can use to validate IoT devices for reliable and secure connectivity with AWS IoT Core before deploying devices to production. By using Device Advisor, you can confirm that your devices can connect to AWS IoT Core, follow security best practices and, if applicable, receive software updates from IoT Device Management. You can also download signed qualification reports to submit to the AWS Partner Network to get your device qualified for the AWS Partner Device Catalog without the need to send your device in and wait for it to be tested.</p>', 'operations' => [ 'CreateSuiteDefinition' => '<p>Creates a Device Advisor test suite.</p>', 'DeleteSuiteDefinition' => '<p>Deletes a Device Advisor test suite.</p>', 'GetSuiteDefinition' => '<p>Gets information about a Device Advisor test suite.</p>', 'GetSuiteRun' => '<p>Gets information about a Device Advisor test suite run.</p>', 'GetSuiteRunReport' => '<p>Gets a report download link for a successful Device Advisor qualifying test suite run.</p>', 'ListSuiteDefinitions' => '<p>Lists the Device Advisor test suites you have created.</p>', 'ListSuiteRuns' => '<p>Lists the runs of the specified Device Advisor test suite. You can list all runs of the test suite, or the runs of a specific version of the test suite.</p>', 'ListTagsForResource' => '<p>Lists the tags attached to an IoT Device Advisor resource.</p>', 'StartSuiteRun' => '<p>Starts a Device Advisor test suite run.</p>', 'StopSuiteRun' => '<p>Stops a Device Advisor test suite run that is currently running.</p>', 'TagResource' => '<p>Adds to and modifies existing tags of an IoT Device Advisor resource.</p>', 'UntagResource' => '<p>Removes tags from an IoT Device Advisor resource.</p>', 'UpdateSuiteDefinition' => '<p>Updates a Device Advisor test suite.</p>', ], 'shapes' => [ 'AmazonResourceName' => [ 'base' => NULL, 'refs' => [ 'CreateSuiteDefinitionResponse$suiteDefinitionArn' => '<p>Creates a Device Advisor test suite with Amazon Resource name.</p>', 'DeviceUnderTest$thingArn' => '<p>Lists devices thing arn</p>', 'DeviceUnderTest$certificateArn' => '<p>Lists devices certificate arn</p>', 'GetSuiteDefinitionResponse$suiteDefinitionArn' => '<p>The ARN of the suite definition.</p>', 'GetSuiteRunResponse$suiteRunArn' => '<p>The ARN of the suite run.</p>', 'ListTagsForResourceRequest$resourceArn' => '<p>The ARN of the IoT Device Advisor resource.</p>', 'StartSuiteRunResponse$suiteRunArn' => '<p>Amazon resource name of the started suite run.</p>', 'SuiteDefinitionConfiguration$devicePermissionRoleArn' => '<p>Gets device permission arn.</p>', 'TagResourceRequest$resourceArn' => '<p>The resource ARN of an IoT Device Advisor resource.</p>', 'UntagResourceRequest$resourceArn' => '<p>The resource ARN of an IoT Device Advisor resource.</p>', 'UpdateSuiteDefinitionResponse$suiteDefinitionArn' => '<p>Amazon Resource name of the updated test suite.</p>', ], ], 'ConflictException' => [ 'base' => '<p>Sends Conflict Exception.</p>', 'refs' => [], ], 'CreateSuiteDefinitionRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateSuiteDefinitionResponse' => [ 'base' => NULL, 'refs' => [], ], 'DeleteSuiteDefinitionRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteSuiteDefinitionResponse' => [ 'base' => NULL, 'refs' => [], ], 'DeviceUnderTest' => [ 'base' => '<p>Lists all the devices under test</p>', 'refs' => [ 'DeviceUnderTestList$member' => NULL, 'SuiteRunConfiguration$primaryDevice' => '<p>Gets the primary device for suite run.</p>', ], ], 'DeviceUnderTestList' => [ 'base' => NULL, 'refs' => [ 'SuiteDefinitionConfiguration$devices' => '<p>Gets the devices configured.</p>', 'SuiteDefinitionInformation$defaultDevices' => '<p>Specifies the devices under test for the test suite.</p>', ], ], 'ErrorReason' => [ 'base' => NULL, 'refs' => [ 'GetSuiteRunResponse$errorReason' => '<p>Error reason for any test suite run failure.</p>', ], ], 'Failure' => [ 'base' => NULL, 'refs' => [ 'TestCaseRun$failure' => '<p>Provides test case run failure result.</p>', ], ], 'GetSuiteDefinitionRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetSuiteDefinitionResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetSuiteRunReportRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetSuiteRunReportResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetSuiteRunRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetSuiteRunResponse' => [ 'base' => NULL, 'refs' => [], ], 'GroupName' => [ 'base' => NULL, 'refs' => [ 'GroupResult$groupName' => '<p>Group Result Name.</p>', ], ], 'GroupResult' => [ 'base' => '<p>Show Group Result.</p>', 'refs' => [ 'GroupResultList$member' => NULL, ], ], 'GroupResultList' => [ 'base' => '<p>Group Result list.</p>', 'refs' => [ 'TestResult$groups' => '<p>Show each group of test results.</p>', ], ], 'IntendedForQualificationBoolean' => [ 'base' => NULL, 'refs' => [ 'SuiteDefinitionConfiguration$intendedForQualification' => '<p>Gets the tests intended for qualification in a suite.</p>', 'SuiteDefinitionInformation$intendedForQualification' => '<p>Specifies if the test suite is intended for qualification.</p>', ], ], 'InternalServerException' => [ 'base' => '<p>Sends Internal Failure Exception.</p>', 'refs' => [], ], 'ListSuiteDefinitionsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListSuiteDefinitionsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListSuiteRunsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListSuiteRunsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'LogUrl' => [ 'base' => NULL, 'refs' => [ 'TestCaseRun$logUrl' => '<p>Provides test case run log Url.</p>', ], ], 'MaxResults' => [ 'base' => NULL, 'refs' => [ 'ListSuiteDefinitionsRequest$maxResults' => '<p>The maximum number of results to return at once.</p>', 'ListSuiteRunsRequest$maxResults' => '<p>The maximum number of results to return at once.</p>', ], ], 'Message' => [ 'base' => NULL, 'refs' => [ 'ConflictException$message' => '<p>Sends Conflict Exception message.</p>', 'InternalServerException$message' => '<p>Sends Internal Failure Exception message.</p>', 'ResourceNotFoundException$message' => '<p>Sends Resource Not Found Exception message.</p>', 'ValidationException$message' => '<p>Sends invalid request exception message.</p>', ], ], 'QualificationReportDownloadUrl' => [ 'base' => NULL, 'refs' => [ 'GetSuiteRunReportResponse$qualificationReportDownloadUrl' => '<p>Download URL of the qualification report.</p>', ], ], 'ResourceNotFoundException' => [ 'base' => '<p>Sends Resource Not Found Exception.</p>', 'refs' => [], ], 'RootGroup' => [ 'base' => NULL, 'refs' => [ 'SuiteDefinitionConfiguration$rootGroup' => '<p>Gets test suite root group.</p>', ], ], 'SelectedTestList' => [ 'base' => NULL, 'refs' => [ 'SuiteRunConfiguration$selectedTestList' => '<p>Gets test case list.</p>', ], ], 'StartSuiteRunRequest' => [ 'base' => NULL, 'refs' => [], ], 'StartSuiteRunResponse' => [ 'base' => NULL, 'refs' => [], ], 'Status' => [ 'base' => NULL, 'refs' => [ 'TestCaseRun$status' => '<p>Provides test case run status.</p>', ], ], 'StopSuiteRunRequest' => [ 'base' => NULL, 'refs' => [], ], 'StopSuiteRunResponse' => [ 'base' => NULL, 'refs' => [], ], 'String128' => [ 'base' => NULL, 'refs' => [ 'TagKeyList$member' => NULL, 'TagMap$key' => NULL, ], ], 'String256' => [ 'base' => NULL, 'refs' => [ 'TagMap$value' => NULL, ], ], 'SuiteDefinitionConfiguration' => [ 'base' => '<p>Gets Suite Definition Configuration.</p>', 'refs' => [ 'CreateSuiteDefinitionRequest$suiteDefinitionConfiguration' => '<p>Creates a Device Advisor test suite with suite definition configuration.</p>', 'GetSuiteDefinitionResponse$suiteDefinitionConfiguration' => '<p>Suite configuration of the suite definition.</p>', 'UpdateSuiteDefinitionRequest$suiteDefinitionConfiguration' => '<p>Updates a Device Advisor test suite with suite definition configuration.</p>', ], ], 'SuiteDefinitionInformation' => [ 'base' => '<p>Information about the suite definition.</p>', 'refs' => [ 'SuiteDefinitionInformationList$member' => NULL, ], ], 'SuiteDefinitionInformationList' => [ 'base' => NULL, 'refs' => [ 'ListSuiteDefinitionsResponse$suiteDefinitionInformationList' => '<p>An array of objects that provide summaries of information about the suite definitions in the list.</p>', ], ], 'SuiteDefinitionName' => [ 'base' => NULL, 'refs' => [ 'CreateSuiteDefinitionResponse$suiteDefinitionName' => '<p>Creates a Device Advisor test suite with suite definition name.</p>', 'SuiteDefinitionConfiguration$suiteDefinitionName' => '<p>Gets Suite Definition Configuration name.</p>', 'SuiteDefinitionInformation$suiteDefinitionName' => '<p>Suite name of the test suite.</p>', 'SuiteRunInformation$suiteDefinitionName' => '<p>Suite definition name of the suite run.</p>', 'UpdateSuiteDefinitionResponse$suiteDefinitionName' => '<p>Suite definition name of the updated test suite.</p>', ], ], 'SuiteDefinitionVersion' => [ 'base' => NULL, 'refs' => [ 'GetSuiteDefinitionRequest$suiteDefinitionVersion' => '<p>Suite definition version of the test suite to get.</p>', 'GetSuiteDefinitionResponse$suiteDefinitionVersion' => '<p>Suite definition version of the suite definition.</p>', 'GetSuiteDefinitionResponse$latestVersion' => '<p>Latest suite definition version of the suite definition.</p>', 'GetSuiteRunResponse$suiteDefinitionVersion' => '<p>Suite definition version for the test suite run.</p>', 'ListSuiteRunsRequest$suiteDefinitionVersion' => '<p>Must be passed along with suiteDefinitionId. Lists the test suite runs of the specified test suite based on suite definition version.</p>', 'StartSuiteRunRequest$suiteDefinitionVersion' => '<p>Suite definition version of the test suite.</p>', 'SuiteRunInformation$suiteDefinitionVersion' => '<p>Suite definition version of the suite run.</p>', 'UpdateSuiteDefinitionResponse$suiteDefinitionVersion' => '<p>Suite definition version of the updated test suite.</p>', ], ], 'SuiteRunConfiguration' => [ 'base' => '<p>Gets suite run configuration.</p>', 'refs' => [ 'GetSuiteRunResponse$suiteRunConfiguration' => '<p>Suite run configuration for the test suite run.</p>', 'StartSuiteRunRequest$suiteRunConfiguration' => '<p>Suite run configuration.</p>', ], ], 'SuiteRunInformation' => [ 'base' => '<p>Information about the suite run.</p>', 'refs' => [ 'SuiteRunsList$member' => NULL, ], ], 'SuiteRunResultCount' => [ 'base' => NULL, 'refs' => [ 'SuiteRunInformation$passed' => '<p>Number of test cases that passed in the suite run.</p>', 'SuiteRunInformation$failed' => '<p>Number of test cases that failed in the suite run.</p>', ], ], 'SuiteRunStatus' => [ 'base' => NULL, 'refs' => [ 'GetSuiteRunResponse$status' => '<p>Status for the test suite run.</p>', 'SuiteRunInformation$status' => '<p>Status of the suite run.</p>', ], ], 'SuiteRunsList' => [ 'base' => NULL, 'refs' => [ 'ListSuiteRunsResponse$suiteRunsList' => '<p>An array of objects that provide summaries of information about the suite runs in the list.</p>', ], ], 'TagKeyList' => [ 'base' => NULL, 'refs' => [ 'UntagResourceRequest$tagKeys' => '<p>List of tag keys to remove from the IoT Device Advisor resource.</p>', ], ], 'TagMap' => [ 'base' => NULL, 'refs' => [ 'CreateSuiteDefinitionRequest$tags' => '<p>The tags to be attached to the suite definition.</p>', 'GetSuiteDefinitionResponse$tags' => '<p>Tags attached to the suite definition.</p>', 'GetSuiteRunResponse$tags' => '<p>The tags attached to the suite run.</p>', 'ListTagsForResourceResponse$tags' => '<p>The tags attached to the IoT Device Advisor resource.</p>', 'StartSuiteRunRequest$tags' => '<p>The tags to be attached to the suite run.</p>', 'TagResourceRequest$tags' => '<p>The tags to be attached to the IoT Device Advisor resource.</p>', ], ], 'TagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'TagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'TestCaseDefinitionName' => [ 'base' => NULL, 'refs' => [ 'TestCaseRun$testCaseDefinitionName' => '<p>Provides test case run definition Name.</p>', ], ], 'TestCaseRun' => [ 'base' => '<p>Provides test case run.</p>', 'refs' => [ 'TestCaseRuns$member' => NULL, ], ], 'TestCaseRuns' => [ 'base' => '<p>Tests under each group result.</p>', 'refs' => [ 'GroupResult$tests' => '<p>Tests under Group Result.</p>', ], ], 'TestResult' => [ 'base' => '<p>Show each group result.</p>', 'refs' => [ 'GetSuiteRunResponse$testResult' => '<p>Test results for the test suite run.</p>', ], ], 'Timestamp' => [ 'base' => NULL, 'refs' => [ 'CreateSuiteDefinitionResponse$createdAt' => '<p>Creates a Device Advisor test suite with TimeStamp of when it was created.</p>', 'GetSuiteDefinitionResponse$createdAt' => '<p>Date (in Unix epoch time) when the suite definition was created.</p>', 'GetSuiteDefinitionResponse$lastModifiedAt' => '<p>Date (in Unix epoch time) when the suite definition was last modified.</p>', 'GetSuiteRunResponse$startTime' => '<p>Date (in Unix epoch time) when the test suite run was started.</p>', 'GetSuiteRunResponse$endTime' => '<p>Date (in Unix epoch time) when the test suite run ended.</p>', 'StartSuiteRunResponse$createdAt' => '<p>Date (in Unix epoch time) when the suite run was created.</p>', 'SuiteDefinitionInformation$createdAt' => '<p>Date (in Unix epoch time) when the test suite was created.</p>', 'SuiteRunInformation$createdAt' => '<p>Date (in Unix epoch time) when the suite run was created.</p>', 'SuiteRunInformation$startedAt' => '<p>Date (in Unix epoch time) when the suite run was started.</p>', 'SuiteRunInformation$endAt' => '<p>Date (in Unix epoch time) when the suite run ended.</p>', 'TestCaseRun$startTime' => '<p>Provides test case run start time.</p>', 'TestCaseRun$endTime' => '<p>Provides test case run end time.</p>', 'UpdateSuiteDefinitionResponse$createdAt' => '<p>Timestamp of when the test suite was created.</p>', 'UpdateSuiteDefinitionResponse$lastUpdatedAt' => '<p>Timestamp of when the test suite was updated.</p>', ], ], 'Token' => [ 'base' => NULL, 'refs' => [ 'ListSuiteDefinitionsRequest$nextToken' => '<p>A token used to get the next set of results.</p>', 'ListSuiteDefinitionsResponse$nextToken' => '<p>A token used to get the next set of results.</p>', 'ListSuiteRunsRequest$nextToken' => '<p>A token to retrieve the next set of results.</p>', 'ListSuiteRunsResponse$nextToken' => '<p>A token to retrieve the next set of results.</p>', ], ], 'UUID' => [ 'base' => NULL, 'refs' => [ 'CreateSuiteDefinitionResponse$suiteDefinitionId' => '<p>Creates a Device Advisor test suite with suite UUID.</p>', 'DeleteSuiteDefinitionRequest$suiteDefinitionId' => '<p>Suite definition Id of the test suite to be deleted.</p>', 'GetSuiteDefinitionRequest$suiteDefinitionId' => '<p>Suite definition Id of the test suite to get.</p>', 'GetSuiteDefinitionResponse$suiteDefinitionId' => '<p>Suite definition Id of the suite definition.</p>', 'GetSuiteRunReportRequest$suiteDefinitionId' => '<p>Suite definition Id of the test suite.</p>', 'GetSuiteRunReportRequest$suiteRunId' => '<p>Suite run Id of the test suite run.</p>', 'GetSuiteRunRequest$suiteDefinitionId' => '<p>Suite definition Id for the test suite run.</p>', 'GetSuiteRunRequest$suiteRunId' => '<p>Suite run Id for the test suite run.</p>', 'GetSuiteRunResponse$suiteDefinitionId' => '<p>Suite definition Id for the test suite run.</p>', 'GetSuiteRunResponse$suiteRunId' => '<p>Suite run Id for the test suite run.</p>', 'GroupResult$groupId' => '<p>Group result Id.</p>', 'ListSuiteRunsRequest$suiteDefinitionId' => '<p>Lists the test suite runs of the specified test suite based on suite definition Id.</p>', 'SelectedTestList$member' => NULL, 'StartSuiteRunRequest$suiteDefinitionId' => '<p>Suite definition Id of the test suite.</p>', 'StartSuiteRunResponse$suiteRunId' => '<p>Suite Run Id of the started suite run.</p>', 'StopSuiteRunRequest$suiteDefinitionId' => '<p>Suite definition Id of the test suite run to be stopped.</p>', 'StopSuiteRunRequest$suiteRunId' => '<p>Suite run Id of the test suite run to be stopped.</p>', 'SuiteDefinitionInformation$suiteDefinitionId' => '<p>Suite definition Id of the test suite.</p>', 'SuiteRunInformation$suiteDefinitionId' => '<p>Suite definition Id of the suite run.</p>', 'SuiteRunInformation$suiteRunId' => '<p>Suite run Id of the suite run.</p>', 'TestCaseRun$testCaseRunId' => '<p>Provides test case run Id.</p>', 'TestCaseRun$testCaseDefinitionId' => '<p>Provides test case run definition Id.</p>', 'UpdateSuiteDefinitionRequest$suiteDefinitionId' => '<p>Suite definition Id of the test suite to be updated.</p>', 'UpdateSuiteDefinitionResponse$suiteDefinitionId' => '<p>Suite definition Id of the updated test suite.</p>', ], ], 'UntagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'UntagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'UpdateSuiteDefinitionRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateSuiteDefinitionResponse' => [ 'base' => NULL, 'refs' => [], ], 'ValidationException' => [ 'base' => '<p>Sends invalid request exception.</p>', 'refs' => [], ], 'Warnings' => [ 'base' => NULL, 'refs' => [ 'TestCaseRun$warnings' => '<p>Provides test case run warnings.</p>', ], ], ],];