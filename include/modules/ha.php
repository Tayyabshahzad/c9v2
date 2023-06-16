<section class="style-3" style="background-image: url('assets/img/integ_11_pattern.png');">
    <div class="container" style="margin-top:-3%">
        <div class="col-lg-12 text-center">
            <div class="section-head style-3  align-items-center" style="margin-top:90px;">
                <div class="info">
                    <div class="section-head style-4 mb-20"> 
                        <h2 class="">   <span>  HA Management     </span>     </h2>
                    </div>
                </div>
                <p class="mt-4">
                    <strong>HA (High Availability) management</strong> is an important aspect of managing an Amygdala XDR cluster. It refers to the ability to ensure that the cluster can continue to operate normally even in the event of hardware or software failures. HA management is critical in ensuring that the cluster remains available and responsive to user requests at all times.    
                </p>  
            </div>
        </div>
        <div class="col-lg-12">
            <h4 class="text-capitalize mb-20 mt-20">Cluster topology</h4>
            <p class="pb-50">
                The topology of the Amygdala XDR cluster is critical to its HA management. A well-designed topology should include multiple nodes distributed across multiple physical hosts, data centers, or availability zones. This ensures that if one node or host fails, the cluster can continue to operate normally. 
            </p>  
        </div>
        <div class="col-lg-12">
            <h4 class="text-capitalize mb-20 mt-20">Load balancing</h4>
            <p class="pb-50">
                Amygdala XDR Load balancing manages the distribution of incoming requests across the nodes in the cluster. Load balancing can be achieved using various techniques, including DNS round-robin, hardware load balancers, or software-based load balancers
            </p>  
        </div>
        <div class="col-lg-12">
            <h4 class="text-capitalize mb-20 mt-20">Monitoring</h4>
            <p class="pb-50">
                 Monitoring is critical to ensuring that the Amygdala XDR cluster remains healthy and responsive. Various monitoring tools and techniques can be used to monitor the cluster's health, including Amygdala XDR's built-in monitoring modules, third-party monitoring tools, and custom scripts or plugins.  
            </p>  
        </div>
        <div class="col-lg-12">
            <h4 class="text-capitalize mb-20 mt-20">Replication</h4>
            <p class="pb-50">
                Amygdala XDR provides several replication mechanisms, including shard replication, index replication, and cross-cluster replication to copy data from one node to another to ensure that data is available even if one node fails. 
            </p>  
        </div> 
        <div class="col-lg-12">
            <h4 class="text-capitalize mb-20 mt-20">Backup and recovery</h4>
            <p class="pb-50">
                Backup and recovery are important aspects of HA management in the Amygdala XDR. Regular backups of the cluster's data should be taken to ensure that data can be recovered in the event of a failure. Various backup and recovery tools can be used, including Amygdala XDR's built-in backup and restore modules, third-party backup tools, and custom scripts or plugins. 
            </p>  
        </div> 
        <div class="col-lg-12 mt-30">
            <div class="main-info">
                <h3 class="text-capitalize mb-20">Features </h3>
                <p class="mt-4">
                    The HA management in Amygdala XDR provides several features that ensure high availability and fault tolerance of the system. Some of these features include: 
                </p>
                <div class="imgs-items border-1 border-bottom border-top brd-gray">
                    <div class="img-item my-5">
                        <div class="row align-items-center">
                            <div class="col-lg-2">
                                <div class="icon mb-3 mb-lg-0">
                                    <img src="assets/img/product/010-expand.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <h5 class="fw-bold mb-2">Scalability:    </h5>
                                <p>The Amygdala XDR HA architecture is designed to scale horizontally, meaning that new nodes can be added to the cluster to handle increased data traffic. The Load Balancer module ensures that the incoming data traffic is distributed across all the nodes in the cluster, providing a scalable and highly available system.    </p>
                            </div>
                        </div>
                    </div>
                    <div class="img-item my-5">
                        <div class="row align-items-center">
                            <div class="col-lg-2">
                                <div class="icon mb-3 mb-lg-0">
                                    <img src="assets/img/product/002-attribute.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <h5 class="fw-bold mb-2"> Redundancy: </h5>
                                <p> The Amygdala XDR HA architecture provides redundancy at multiple levels. For example, the Amygdala XDR Manager Cluster module provides redundancy by deploying multiple Amygdala XDR Manager nodes in an active-active configuration. This ensures that if one node fails, the other nodes can continue processing data without any disruption. Similarly, the Elasticsearch Cluster module provides redundancy by distributing data across multiple nodes in the cluster.     </p>
                            </div>
                        </div>
                    </div>
                    <div class="img-item my-5">
                        <div class="row align-items-center">
                            <div class="col-lg-2">
                                <div class="icon mb-3 mb-lg-0">
                                    <img src="assets/img/product/003-history.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <h5 class="fw-bold mb-2">Failover </h5>
                                <p> The Amygdala XDR HA architecture provides failover capabilities at multiple levels. For example, if a Amygdala XDR Manager node fails, the Load Balancer module automatically redirects the incoming data traffic to other active nodes in the cluster. Similarly, if an Elasticsearch node fails, the data is automatically redistributed to other nodes in the cluster. 
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="img-item my-5">
                        <div class="row align-items-center">
                            <div class="col-lg-2">
                                <div class="icon mb-3 mb-lg-0">
                                    <img src="assets/img/product/006-engineering.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <h5 class="fw-bold mb-2"> Automatic Configuration </h5>
                                <p> The HA management modules in Amygdala XDR are designed to automatically configure themselves based on the number of nodes in the cluster. For example, the Correlation Rules Manager module ensures that the same set of correlation rules is applied across all the nodes in the cluster, regardless of their number. 
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="img-item my-5">
                        <div class="row align-items-center">
                            <div class="col-lg-2">
                                <div class="icon mb-3 mb-lg-0">
                                    <img src="assets/img/product/022-fast-time.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <h5 class="fw-bold mb-2">Real-time Monitoring </h5>
                                <p> The Amygdala XDR HA management modules provide real-time monitoring of the system's health and status. This ensures that any issues or failures can be quickly identified and resolved, minimizing any potential downtime. 

                                </p>
                            </div>
                        </div>
                    </div>
 
 
                </div> 
               
            </div>
        </div>
        <div class="row gx-0 justify-content-between">
            <div class="col-lg-12">
                <h3 class="text-capitalize mb-20 mt-20">Technology-Supported, Protocols </h3>
                <p class="pb-50">
                    The HA management module in Amygdala XDR support a variety of protocols and technologies, including: 
                </p>   
            </div>
            <div class="col-lg-12 mt-30">
                <div class="main-info"> 
                    <div class="imgs-items border-1 border-bottom border-top brd-gray">
                        <div class="img-item my-5">
                            <div class="row align-items-center">
                                <div class="col-lg-2">
                                    <div class="icon mb-3 mb-lg-0">
                                        <img src="assets/img/product/006-integrated-system.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <h5 class="fw-bold mb-2">TCP/IP  </h5>
                                    <p> The communication between the different nodes in the Amygdala XDR HA architecture is based on the TCP/IP protocol.   </p>
                                </div>
                            </div>
                        </div>
                        <div class="img-item my-5">
                            <div class="row align-items-center">
                                <div class="col-lg-2">
                                    <div class="icon mb-3 mb-lg-0">
                                        <img src="assets/img/product/002-attribute.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <h5 class="fw-bold mb-2"> HTTPS </h5>
                                    <p>The communication between the Amygdala XDR Manager and Amygdala XDR Agents is encrypted using the HTTPS protocol. The Load Balancer module also supports HTTPS traffic. </p>
                                </div>
                            </div>
                        </div>
                        <div class="img-item my-5">
                            <div class="row align-items-center">
                                <div class="col-lg-2">
                                    <div class="icon mb-3 mb-lg-0">
                                        <img src="assets/img/product/003-history.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <h5 class="fw-bold mb-2">Elasticsearch API </h5>
                                    <p> The Elasticsearch Cluster module uses the Elasticsearch API to manage and store data. </p>
                                </div>
                            </div>
                        </div>
 
                        <div class="img-item my-5">
                            <div class="row align-items-center">
                                <div class="col-lg-2">
                                    <div class="icon mb-3 mb-lg-0">
                                        <img src="assets/img/product/032-api.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <h5 class="fw-bold mb-2"> REST API </h5>
                                    <p> The Correlation Rules Manager module provides a REST API for managing correlation rules.
                                    </p>
                                </div>
                            </div>
                        </div> 
                        <div class="img-item my-5">
                            <div class="row align-items-center">
                                <div class="col-lg-2">
                                    <div class="icon mb-3 mb-lg-0">
                                        <img src="assets/img/product/006-engineering.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <h5 class="fw-bold mb-2"> Kibana API </h5>
                                    <p> The Kibana module provides a REST API for data visualization and analysis.   
                                    </p>
                                </div>
                            </div>
                        </div> 
                        <div class="img-item my-5">
                            <div class="row align-items-center">
                                <div class="col-lg-2">
                                    <div class="icon mb-3 mb-lg-0">
                                        <img src="assets/img/product/003-log-file.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <h5 class="fw-bold mb-2"> Syslog </h5>
                                    <p>  
                                        The Amygdala XDR Manager and Amygdala XDR Agents can send and receive data using the Syslog protocol.  
                                    </p>
                                </div>
                            </div>
                        </div>
    
    
                    </div> 
                
                </div>
            </div>



            <div class="col-lg-12">
                <h3 class="text-capitalize mb-20 mt-20"> Module Dependency </h3>
                <p>
                    NA
                </p> 
            </div>
            <div class="col-lg-12">
                <h3 class="text-capitalize mb-20 mt-20"> Scalability </h3>
                <p>
                    NA 
                </p> 
            </div>
            <div class="col-lg-12">
                <h3 class="text-capitalize mb-20 mt-20"> Dashboards </h3>
                <p>
                    PHOTO 
                </p> 
            </div>
        </div>
    </div>
</section>


