<?php

namespace MBO\SatisGitlab\Git;

/**
 * Lightweight client interface to list hosted git project 
 * and access files such as composer.json
 */
interface ClientInterface {

    /**
     * Find projects throw API
     * 
     * @return ProjectInterface[]
     */
    public function find(array $options);

    /**
     * Get raw file
     * 
     * @param string $projectId ex : 123456
     * @param string $filePath ex : composer.json
     * @param string $ref ex : master
     * 
     * @return string
     */
    public function getRawFile(
        ProjectInterface $project, 
        $filePath,
        $ref
    );


}

