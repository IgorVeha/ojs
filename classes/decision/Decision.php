<?php

/**
 * @defgroup decision Decision
 */

/**
 * @file classes/decision/Decision.inc.php
 *
 * Copyright (c) 2014-2022 Simon Fraser University
 * Copyright (c) 2000-2022 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class Decision
 * @ingroup decision
 *
 * @see DAO
 *
 * @brief An editorial decision taken on a submission, such as to accept, decline or request revisions.
 */

namespace APP\decision;

use PKP\decision\Decision as BaseDecision;

class Decision extends BaseDecision
{
    public const ACCEPT = 1;
    public const PENDING_REVISIONS = 2;
    public const RESUBMIT = 3;
    public const DECLINE = 4;
    public const EXTERNAL_REVIEW = 8;
}

if (!PKP_STRICT_MODE) {
    // Some constants are not redefined here because they never existed as global constants
    define('SUBMISSION_EDITOR_DECISION_EXTERNAL_REVIEW', Decision::EXTERNAL_REVIEW);
    define('SUBMISSION_EDITOR_DECISION_ACCEPT', Decision::ACCEPT);
    define('SUBMISSION_EDITOR_DECISION_DECLINE', Decision::DECLINE);
    define('SUBMISSION_EDITOR_DECISION_PENDING_REVISIONS', Decision::PENDING_REVISIONS);
    define('SUBMISSION_EDITOR_DECISION_RESUBMIT', Decision::RESUBMIT);
}
