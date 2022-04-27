<?php namespace JournalTransporterPlugin\Repository;

use JournalTransporterPlugin\Utility\DAOFactory;

class Role {

    public function fetchByJournal($journal)
    {
        return DAOFactory::get()->getDAO('role')->getUsersByJournalId($journal->getId());
    }

    public function fetchByUserAndJournal($user, $journal)
    {
        return DAOFactory::get()->getDAO('role')->getRolesByUserId($user->getId(), $journal->getId());
    }

}
