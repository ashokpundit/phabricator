<?php

/*
 * Copyright 2011 Facebook, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

final class DifferentialDefaultFieldSelector
  extends DifferentialFieldSelector {

  public function getFieldSpecifications() {
    return array(
      new DifferentialRevisionStatusFieldSpecification(),
      new DifferentialAuthorFieldSpecification(),
      new DifferentialReviewersFieldSpecification(),
      new DifferentialCCsFieldSpecification(),
      new DifferentialUnitFieldSpecification(),
      new DifferentialLintFieldSpecification(),
      new DifferentialCommitsFieldSpecification(),
      new DifferentialDependenciesFieldSpecification(),
      new DifferentialManiphestTasksFieldSpecification(),
      new DifferentialHostFieldSpecification(),
      new DifferentialPathFieldSpecification(),
      new DifferentialLinesFieldSpecification(),
      new DifferentialArcanistProjectFieldSpecification(),
      new DifferentialApplyPatchFieldSpecification(),
      new DifferentialExportPatchFieldSpecification(),
    );
  }

}