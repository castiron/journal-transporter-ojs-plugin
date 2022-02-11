<?php namespace CdlExportPlugin\Builder\Mapper\DataObject;

class Author extends AbstractDataObjectMapper
{
    protected static $mapping = <<<EOF
		            authorId -> id
		                        firstName
		                        middleName
		                        lastName
		                        initials
		localizedAffiliation -> affiliation
		                        salutation
		                        country
		                        url
		                        email
		  localizedBiography -> biography
		                        sequence
		                        primaryContact
EOF;
}